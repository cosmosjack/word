/**
 * Created by Administrator on 2017/12/28.
 */
'use strict';
var SendXMLHttpRequest = function SendXMLHttpRequest(url, data, success, error, fail) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status >= 200 && xhr.status < 300 || xhr.status === 304) {
                var response = JSON.parse(xhr.responseText);
                if (response.code !== 1) {
                    return error(xhr, response);
                }
                return success(xhr, response);
            }
            fail(xhr);
        }
    };
    xhr.open(data !== null ? 'POST' : 'GET', url, true);
    xhr.send(data !== null ? JSON.stringify(data) : null);
};
module.exports = {
    send: function send(endpoint, danmakuData, callback) {
        SendXMLHttpRequest(endpoint, danmakuData, function (xhr, response) {
            console.log('Post danmaku: ', response);
            if (callback) {
                callback();
            }
        }, function (xhr, response) {
            alert(response.msg);
        }, function (xhr) {
            console.log('Request was unsuccessful: ' + xhr.status);
        });
    },
    read: function read(endpoint, callback) {
        SendXMLHttpRequest(endpoint, null, function (xhr, response) {
            callback(null, response.danmaku);
        }, function (xhr, response) {
            callback({
                status: xhr.status,
                response: response
            });
        }, function (xhr) {
            callback({
                status: xhr.status,
                response: null
            });
        });
    }
};


//////////////////
// WEBPACK FOOTER
// ./src/api.js
// module id = 6
// module chunks = 0
