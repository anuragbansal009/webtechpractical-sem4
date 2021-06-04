// This class will represent the gif display area. It keeps track of which gif
// is being shown and can select a new random gif to be shown.
// 
// See labwork 7 writeup for more hints and details.
class GifDisplay {
  constructor(showMusicScrenCallback) {
    // TODO(you): Implement the constructor and add fields as necessary.
    this._onLoad = this._onLoad.bind(this);
    this._getRandomIndex = this._getRandomIndex.bind(this);
    this._loadTwo = this._loadTwo.bind(this);
    this._preload = this._preload.bind(this);
    this.swapGifPlace = this.swapGifPlace.bind(this);
    this.imageArray = [];
    this._showMusicScreenCallback = showMusicScrenCallback;
    this.numberOfGifs = 0;
  }

  provideJSON(json) {
    this.json = json;
    this._preload(0);
  }

  _preload(index) {
    if (index !== this.json.data.length) {
      const gif = new Image();
      gif.src = this.json.data[index].images.downsized.url;
      gif.addEventListener("load", this._onLoad);
      this.imageArray.push(gif);
    }
  }

  _onLoad(event) {
    this.numberOfGifs++;
    if (this.numberOfGifs == 2) {
      this._showMusicScreenCallback();
      this._loadTwo();
    }
    this._preload(this.numberOfGifs);
  }

  _loadTwo() {
    const foreground = document.querySelector("#foreground");
    const background = document.querySelector("#background");
    this.foregroundContainer = foreground;
    this.backgroundContainer = background;
    this.foregroundImage = this.imageArray[0];
    this.backgroundImage = this.imageArray[1];
    this.foregroundContainer.style.backgroundImage = "url( " + this.foregroundImage.src + ")";
    this.backgroundContainer.style.backgroundImage = "url( " + this.backgroundImage.src + ")";
  }

  swapGifPlace() {
    this.foregroundContainer.style.backgroundImage = "url( " + this.backgroundImage.src + ")";
    this.foregroundImage = this.backgroundImage;
    let backgroundImage = this.imageArray[this._getRandomIndex()]
    while (backgroundImage === this.foregroundImage) {
      backgroundImage = this.imageArray[this._getRandomIndex()];
    }
    this.backgroundImage = backgroundImage;
    this.backgroundContainer.style.backgroundImage = "url( " + this.backgroundImage.src + ")";
    this.backgroundContainer.style.zIndex = "0";
    this.foregroundContainer.style.zIndex = "1";
  }

  _getRandomIndex() {
    const minValue = Math.ceil(0);
    const maxValue = Math.floor(this.imageArray.length);
    const randomIndex = Math.floor(Math.random() * (maxValue - minValue)) + minValue;
    return randomIndex;
  }
  // TODO(you): Add methods as necessary.
}
