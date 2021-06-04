// This class will represent the music visualizer screen, i.e. the screen that
// you see after you select a song.
//
// This class should create and own:
//   - 1 AudioPlayer
//   - 1 GifDisplay
//   - 1 PlayButton
//
// See labwork 7 writeup for more hints and details.
class MusicScreen {
  constructor(showErrorScreenCallback) {
    // TODO(you): Implement the constructor and add fields as necessary.
    this._getKeyWordForGiphy = this._getKeyWordForGiphy.bind(this);
    this._showMusicScreenCallback = this._showMusicScreenCallback.bind(this);
    this._onSuccess = this._onSuccess.bind(this);
    this._onFail = this._onFail.bind(this);
    this._onKick = this._onKick.bind(this);
    this._playMusicCallback = this._playMusicCallback.bind(this);
    this._onStreamProcessed = this._onStreamProcessed.bind(this);
    this._cacheMusicSelection = this._cacheMusicSelection.bind(this);
    this._pauseMusicCallback = this._pauseMusicCallback.bind(this);
    this.gifDisplay = new GifDisplay(this._showMusicScreenCallback);
    this.playButton = new PlayButton(this._playMusicCallback, this._pauseMusicCallback);
    this.musicContainer = document.querySelector("#musicScreen");
    this._showErrorScreen = showErrorScreenCallback;
  }

  show() {
    this.musicContainer.classList.remove('inactive');
  }

  hide() {
    this.musicContainer.classList.add('inactive');
  }

  queryGIPHY(theme, music) {
    this._cacheMusicSelection(music);
    let api = "https://api.giphy.com/v1/gifs/search?q=";
    let keyword = this._getKeyWordForGiphy(theme);
    let apiKey = "&api_key=dc6zaTOxFJmzC&limit=25&rating=g";
    const url = api + keyword + apiKey;
    fetch(url).then(this._onSuccess, this._onFail);
  }

  _getKeyWordForGiphy(theme) {
    theme = encodeURIComponent(theme);
    let keyword = theme.split(' ').join('+');
    return keyword;
  }

  _onStreamProcessed(json) {
    if (json.data.length < 2) {
      this._showErrorScreen();
    } else {
      this.gifDisplay.provideJSON(json);
      const loadingContainer = document.querySelector("#loading");
      loadingContainer.classList.remove('inactive');
    }
  }

  _onSuccess(success) {
    success.json().then(this._onStreamProcessed);
  }

  _onFail(fail) {
    console.log("music screen: failure");
  }

  _showMusicScreenCallback() {
    const loadingContainer = document.querySelector("#loading");
    loadingContainer.classList.add('inactive');
    this.show();
    this._playMusicCallback();
  }

  _playMusicCallback() {
    this.audioPlayer.play();
  }

  _cacheMusicSelection(music) {
    this.musicSelection = music;
    this.audioPlayer = new AudioPlayer();
    this.audioPlayer.setKickCallback(this._onKick);
    this.audioPlayer.setSong(this.musicSelection);
  }

  _onKick(event) {
    this.gifDisplay.swapGifPlace();
  }

  _pauseMusicCallback() {
    this.audioPlayer.pause();
  }
  // TODO(you): Add methods as necessary.
}
