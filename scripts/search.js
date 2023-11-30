
var showOptionsCheckbox1 = document.getElementById('showOptions1');
var optionsList1 = document.getElementById('optionsList1');
var selectedOptionsCountBadge1 = document.getElementById('selectedOptionsCountBadge1');

showOptionsCheckbox1.addEventListener('change', function () {
    optionsList1.classList.toggle('show', this.checked);
    updateSelectedOptionsCount(optionsList1, selectedOptionsCountBadge1);
});
document.querySelectorAll('#optionsList1 input').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        updateSelectedOptionsCount(optionsList1, selectedOptionsCountBadge1);
    });
});

var showOptionsCheckbox2 = document.getElementById('showOptions2');
var optionsList2 = document.getElementById('optionsList2');
var selectedOptionsCountBadge2 = document.getElementById('selectedOptionsCountBadge2');

showOptionsCheckbox2.addEventListener('change', function () {
    optionsList2.classList.toggle('show', this.checked);
    updateSelectedOptionsCount(optionsList2, selectedOptionsCountBadge2);
});
document.querySelectorAll('#optionsList2 input').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        updateSelectedOptionsCount(optionsList2, selectedOptionsCountBadge2);
    });
});

var showOptionsCheckbox3 = document.getElementById('showOptions3');
var optionsList3 = document.getElementById('optionsList3');
var selectedOptionsCountBadge3 = document.getElementById('selectedOptionsCountBadge3');

showOptionsCheckbox3.addEventListener('change', function () {
    optionsList3.classList.toggle('show', this.checked);
    updateSelectedOptionsCount(optionsList3, selectedOptionsCountBadge3);
});
document.querySelectorAll('#optionsList3 input').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        updateSelectedOptionsCount(optionsList3, selectedOptionsCountBadge3);
    });
});


var showOptionsCheckbox4 = document.getElementById('showOptions4');
var optionsList4 = document.getElementById('optionsList4');
var selectedOptionsCountBadge4 = document.getElementById('selectedOptionsCountBadge4');

showOptionsCheckbox4.addEventListener('change', function () {
    optionsList4.classList.toggle('show', this.checked);
    updateSelectedOptionsCount(optionsList4, selectedOptionsCountBadge4);
});
document.querySelectorAll('#optionsList4 input').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        updateSelectedOptionsCount(optionsList4, selectedOptionsCountBadge4);
    });
});
function updateSelectedOptionsCount(optionsList, badge) {
    var selectedOptionsCount = optionsList.querySelectorAll('input:checked').length;
        badge.textContent = selectedOptionsCount;
        badge.style.display = selectedOptionsCount > 0 ? 'inline' : 'none';
    
}