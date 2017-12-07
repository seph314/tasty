// This is a simple *viewmodel* - JavaScript that defines the data and behavior of your UI
function AppViewModel() {
    this.firstName = ko.observable("Bert");
    this.lastName = ko.observable("Bertington");

    // We're passing a callback function to the ko.computed which specifies how it should compute its value
    this.fullName = ko.computed(function() {
        return this.firstName() + " " + this.lastName();
    }, this);

    // Capitalize last name
    this.capitalizeLastName = function() {
        var currentVal = this.lastName();        // Read the current value
        this.lastName(currentVal.toUpperCase()); // Write back a modified value
    };
}

// Activates knockout.js
ko.applyBindings(new AppViewModel());