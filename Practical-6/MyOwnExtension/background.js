'use strict'
let stateAllTabs = false;
var window_target = null;
var count_tabs = 0;

function initialise(tab) {
    chrome.windows.getCurrent(getWindowNumber);
}

function getWindowNumber(win) {
    window_target = win;
    chrome.tabs.getAllInWindow(window_target.id, getTabNumber);
}

function getTabNumber(tabs) {
    stateAllTabs = !stateAllTabs;
    chrome.windows.getAll({
        populate: true
    }, windowList => {
        windowList.forEach(window => {
            window.tabs.forEach(tab => {
                if (tab.audible || tab.mutedInfo.muted) {
                    chrome.tabs.update(tab.id, {
                        muted: stateAllTabs
                    });
                }
            });
        });
    });
    count_tabs = tabs.length;
    chrome.windows.getAll({
        "populate": true
    }, concatenateTabs);
}

function concatenateTabs(windows) {
    var numWindows = windows.length;
    var tabPosition = count_tabs;

    for (var i = 0; i < numWindows; i++) {
        var win = windows[i];

        if (window_target.id != win.id) {
            var numTabs = win.tabs.length;

            for (var j = 0; j < numTabs; j++) {
                var tab = win.tabs[j];
                chrome.tabs.move(tab.id, {
                    "windowId": window_target.id,
                    "index": tabPosition
                });
                tabPosition++;
            }
        }
    }

}

chrome.browserAction.onClicked.addListener(initialise);

console.log('Extension Loaded');