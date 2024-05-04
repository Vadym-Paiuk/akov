class Security {
	constructor() {
		// this.turnOffContextMenu();
		// this.turnOffDeveloperTools();
	}

	static getInstance() {
		if (!this.instance) {
			this.instance = new this();
		}
		return this.instance;
	}

	turnOffContextMenu() {
		$(document).bind("contextmenu", function(event) {
			return false;
		});

		$(document).on("contextmenu", function(event) {
			event.preventDefault();
		});
	}

	turnOffDeveloperTools() {
		$(document).keydown(function(event) {
			if (event.keyCode == 123) {
				// Prevent F12
				return false;
			} else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
				// Prevent Ctrl+Shift+I
				return false;
			}
		});
	}
}

Security.getInstance();
