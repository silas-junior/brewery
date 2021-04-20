const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"breweries.index":{"uri":"\/","methods":["GET","HEAD"]},"button":{"uri":"button","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    for (let name in window.Ziggy.routes) {
        Ziggy.routes[name] = window.Ziggy.routes[name];
    }
}

export { Ziggy };
