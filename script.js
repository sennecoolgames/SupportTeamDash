    let serializedData;
    let serializedFull;

    const gridOptions = {
      minRow: 1,
      cellHeight: 80,
      float: true,
      draggable: { cancel: '.no-drag'}, 
     
      renderCB: function(el, w) {
        
        const content = el.querySelector('.grid-stack-item-content');
        if (content && w.content) { content.innerHTML = w.content; }
      }
    };
    let grid = GridStack.init(gridOptions);

    
    // 3.1 full method saving the grid options + children (which is recursive for nested grids)
    function saveFullGrid() {
      serializedFull = {
        ...grid.save(true, false),
        children: grid.save(false, true).children 
      };
      document.querySelector('#saved-data').value = JSON.stringify(serializedFull, null, '  ');
    }

    // 3.1 full method to reload from scratch - delete the grid and add it back from JSON
    function loadFullGrid() {
      if (!serializedFull) return;
      grid.load(serializedFull.children);
    }

    function clearGrid() {
      grid.removeAll();
    }

    function removeWidget(el) {
      // TEST removing from DOM first like Angular/React/Vue would do
      el.remove();
      grid.removeWidget(el, false);
    }