const electron = require('electron')
const {app, BrowserWindow} = electron

app.on('ready', () =>{
	let win = new BrowserWindow({width:800, heght:600})
	win.loadURL('file://' + __dirname +'/'+ filename + 'index2.html')﻿
})

exports.openWindow = (filename) =>{
	let win = new BrowserWindow({width:800, heght:600})
	win.loadURL('file://' + __dirname +'/'+ filename + 'index.html')﻿
}