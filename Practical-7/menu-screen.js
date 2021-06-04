// This class will represent the menu screen that you see when you first load
// the music visualizer.
//
// See labwork 7 writeup for more hints and details.
class MenuScreen {
  constructor(onMenuLoadCallback, goToCallBackMusic) {
    // TODO(you): Implement the constructor and add fields as necessary.
    this.possibleThemes = ['candy', 'charlie brown', 'computers', 'dance',
      'donuts', 'hello kitty', 'flowers', 'nature', 'turtles', 'space'];
    this._populateSongs = this._populateSongs.bind(this);
    this._populateThemes = this._populateThemes.bind(this);
    this.showErrorScreen = this.showErrorScreen.bind(this);
    this._removeErrorScreen = this._removeErrorScreen.bind(this);
    this.menuContainer = document.querySelector("#menu");
    this._onSuccess = this._onSuccess.bind(this);
    this._onFail = this._onFail.bind(this);
    this._getRandomIndex = this._getRandomIndex.bind(this);
    this._onStreamProcessed = this._onStreamProcessed.bind(this);
    this.accessMusicSelection = this.accessMusicSelection.bind(this);
    this.musicContent = null;
    this._goToMusic = goToCallBackMusic;
    this.songTitleMap = {};
    const queryContainer = document.querySelector("#query-input");
    this.queryContainer = queryContainer;
    this.queryContainer.addEventListener("input", this._removeErrorScreen);
    this.userError = false;
    this._onMenuLoadCallback = onMenuLoadCallback;
  }

  show() {
    this.menuContainer.classList.remove('inactive');
  }

  hide() {
    this.menuContainer.classList.add('inactive');
  }

  loadOptions() {
    fetch('https://anuragbansal009.github.io/webtechpractical-sem4/Practical-7/songs.json').then(this._onSuccess, this._onFail);
  }

  _onSuccess(success) {
    success.json().then(this._onStreamProcessed);
  }

  _onStreamProcessed(json) {
    this.musicContent = json;
    this._populateSongs();
    this._populateThemes();
    this._addEventToButton();
  }

  _onFail() {
    console.log("failure");
  }

  _populateSongs() {
    const selectionContainer = document.querySelector("#song-selector");
    for (const song in this.musicContent) {
      const option = document.createElement("option");
      option.value = this.musicContent[song].title
      option.innerHTML = this.musicContent[song].title
      this.songTitleMap[this.musicContent[song].title] = song;
      selectionContainer.appendChild(option);
    }
    this._onMenuLoadCallback();
  }

  _populateThemes() {
    const queryContainer = document.querySelector("#query-input");
    const randomIndex = this._getRandomIndex();
    queryContainer.value = this.possibleThemes[randomIndex];
  }

  _addEventToButton() {
    const goButton = document.querySelector("form");
    goButton.addEventListener("submit", this._goToMusic);
  }

  accessMusicSelection(songTitle) {
    return this.musicContent[this.songTitleMap[songTitle]].songUrl;
  }

  blankInput() {
    return this.possibleThemes[this._getRandomIndex()];
  }

  _getRandomIndex() {
    const minValue = Math.ceil(0);
    const maxValue = Math.floor(this.possibleThemes.length);
    const randomIndex = Math.floor(Math.random() * (maxValue - minValue)) + minValue;
    return randomIndex;
  }

  showErrorScreen() {
    const errorContainer = document.querySelector("#error");
    this.errorContainer = errorContainer;
    this.errorContainer.classList.remove('inactive');
    this.userError = true;
  }

  _removeErrorScreen(event) {
    if (this.userError === true) {
      this.errorContainer.classList.add('inactive');
    }
    this.userError = false;
  }
  // TODO(you): Add methods as necessary.
}
