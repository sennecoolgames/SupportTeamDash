<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <h1>Welcome to the Dashboard</h1>
    <ul>
        <li></li><a onclick="saveFullGrid()" class="btn btn-primary" href="#">Save Full</a></li>
        <li><a onclick="loadFullGrid()" class="btn btn-primary" href="#">Load Full</a></li>
    </ul>
    <div id="gridCont">
        <div class="grid-stack">
            <div class="grid-stack-item" gs-x="0" gs-y="0" gs-w="2" gs-h="2" gs-id="0">
                <div class="grid-stack-item-content"><button
                        onclick="removeWidget(this.parentElement.parentElement)">X</button><br> 0<br> </div>
            </div>
            <div class="grid-stack-item" gs-x="2" gs-y="1" gs-w="2" gs-h="3" gs-id="1">
                <div class="grid-stack-item-content"><button
                        onclick="removeWidget(this.parentElement.parentElement)">X</button><br> 1<br> <button
                        onclick="alert('clicked!')">Press me</button>
                    <div>text area</div>
                    <div>
                        <textarea></textarea>
                    </div>
                    <div>Input Field</div>
                    <input type="text">
                    <div contenteditable="true">Editable Div</div>
                    <div class="no-drag">no drag</div>
                </div>
            </div>
            <div class="grid-stack-item" gs-x="4" gs-y="1" gs-id="2">
                <div class="grid-stack-item-content"><button
                        onclick="removeWidget(this.parentElement.parentElement)">X</button>
                    <br> 2
                    <br>
                </div>
            </div>
            <div class="grid-stack-item" gs-x="1" gs-y="3" gs-id="3">
                <div class="grid-stack-item-content">
                    <button onclick="removeWidget(this.parentElement.parentElement)">X</button>
                    <br> 3
                    <br>
                </div>
            </div>
            <div class="grid-stack-item" gs-x="2" gs-y="3" gs-w="3" gs-id="4">
                <div class="grid-stack-item-content"><button
                        onclick="removeWidget(this.parentElement.parentElement)">X</button>
                    <br> 4
                    <br>
                </div>
            </div>
        </div>
    </div>
    <textarea id="saved-data" style="width: 100%" cols="100" rows="20" readonly="readonly"></textarea>

    <?php include 'footer.php'; ?>
</body>
</html>