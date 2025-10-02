    let serializedData;
    let serializedFull;

    const gridOptions = {
      minRow: 1, // don't let it collapse when empty
      cellHeight: 80,
      float: true,
      draggable: { cancel: '.no-drag'}, // example of additional custom elements to skip drag on
      // When loading a grid from JSON, we need to tell gridstack how to render the content.
      renderCB: function(el, w) {
        // We need to set the content of the widget, which is the `innerHTML` of the .grid-stack-item-content
        const content = el.querySelector('.grid-stack-item-content');
        if (content && w.content) { content.innerHTML = w.content; }
      }
    };
    let grid = GridStack.init(gridOptions);

    // 2.x method - just saving list of widgets with content (default)
    function loadGrid() {
      grid.load(serializedData);
    }

    // 2.x method
    function saveGrid() {
      delete serializedFull;
      serializedData = grid.save();
      document.querySelector('#saved-data').value = JSON.stringify(serializedData, null, '  ');
    }

    // 3.1 full method saving the grid options + children (which is recursive for nested grids)
    function saveFullGrid() {
      // Save grid options, but use the simple save for children to avoid saving the entire DOM
      serializedFull = {
        ...grid.save(true, false), // Save grid options, but not children
        children: grid.save(false, true).children // Save children with content
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