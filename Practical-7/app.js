// This class will represent the music visualizer as a whole, similar to the
// role that the `App` class played.
//
// See labwork 7 writeup for more hints and details.
class App {
  constructor() {
    // TODO(you): Implement the constructor and add fields as necessary.
    this._goToMusic = this._goToMusic.bind(this);
    this._showErrorScreen = this._showErrorScreen.bind(this);
    this._onMenuLoad = this._onMenuLoad.bind(this);
    this.menu = new MenuScreen(this._onMenuLoad, this._goToMusic);
    this.musicScreen = new MusicScreen(this._showErrorScreen);
    this.musicScreen.hide();
    this.menu.hide();
    this.menu.loadOptions();
  }

  _goToMusic(event) {
    event.preventDefault();
    this.menu.hide();
    const musicSelection = document.querySelector("#song-selector").value;
    const musicUrl = this.menu.accessMusicSelection(musicSelection);
    const themeSelection = this._getThemeSelection();
    this.musicScreen.queryGIPHY(themeSelection, musicUrl);
  }

  _getThemeSelection() {
    let themeSelection = document.querySelector("#query-input").value;
    if (themeSelection.replace(/\s/g, "") == "") themeSelection = this.menu.blankInput();
    return themeSelection;
  }

  _showErrorScreen() {
    this.menu.show();
    this.menu.showErrorScreen();
  }

  _onMenuLoad() {
    const loadingContainer = document.querySelector("#loading");
    loadingContainer.classList.add('inactive');
    this.menu.show();
  }
  // TODO(you): Add methods as necessary.
}
