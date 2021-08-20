function createHTML() {
  $.ajax({
    url: '/servers/txt/atm.txt',
    success: function(data) {
      let d = data.split('\n');
      let html = `
            <div class="card">
        <div class="content">
            <img id="logo" alt="TYS LOGO" class="right floated small ui image" src="/img/${d[1]}">
            <div id="header" class="header">${d[2]}</div>
        <div id="meta" class="meta">${d[3]}</div>
        <div id="description" class="description">${d[4]}</div>
        <div class="ui divider"></div>
        <div class="extra content">
            <button id="copyIP" data-clipboard-text="${d[5]}" data-tooltip="${d[6]}"
                    data-inverted="" class="ui huge green button"><i class="copy outline left icon"></i>${d[7]}
            </button>
        </div>
        </div>
        </div>`;
      const htmlObj = $(html);
      $('#cards').prepend(htmlObj);
    },
  });
}
