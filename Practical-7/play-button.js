// This class will represent the play button in the MusicScreen. Clicking on
// it toggles audio playback.
//
// See labwork 7 writeup for more hints and details.
class PlayButton {
  constructor(playMusicCallback, pauseMusicCallback) {
    // TODO(you): Implement the constructor and add fields as necessary.
    this.play = this.play.bind(this);
    this.pause = this.pause.bind(this);
    this._hidePause = this._hidePause.bind(this);
    this._hidePlay = this._hidePlay.bind(this);
    this._playMusicCallback = playMusicCallback;
    this._pauseMusicCallback = pauseMusicCallback;
    const playButton = document.querySelector("#play");
    const pauseButton = document.querySelector("#pause");
    this.playButton = playButton;
    this.pauseButton = pauseButton;
    this._hidePlay();

  }

  play(event) {
    this._hidePlay();
    this._playMusicCallback();
  }

  pause(event) {
    this._hidePause();
    this._pauseMusicCallback();
  }

  _hidePause() {
    this.pauseButton.classList.add('inactive');
    this.pauseButton.removeEventListener("click", this.pause);
    this.playButton.classList.remove('inactive');
    this.playButton.addEventListener("click", this.play);
  }

  _hidePlay() {
    this.playButton.classList.add('inactive');
    this.pauseButton.removeEventListener("click", this.play);
    this.pauseButton.classList.remove('inactive');
    this.pauseButton.addEventListener("click", this.pause);

  }
  // TODO(you): Add methods as necessary.
}
