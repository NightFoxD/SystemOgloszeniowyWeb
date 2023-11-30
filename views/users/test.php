<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="showOptions1">
                <label class="form-check-label" for="showOptions1">Pokaż opcje 1</label>
            </div>

            <div class="collapse" id="optionsList1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option1_1">
                    <label class="form-check-label" for="option1_1">Opcja 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option1_2">
                    <label class="form-check-label" for="option1_2">Opcja 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option1_3">
                    <label class="form-check-label" for="option1_3">Opcja 3</label>
                </div>
            </div>

            <div class="mt-2">
                <i class="bi bi-info-circle"></i>
                <span>Zaznaczono <span id="selectedOptionsCountBadge1" class="badge bg-primary">0</span> opcji</span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="showOptions2">
                <label class="form-check-label" for="showOptions2">Pokaż opcje 2</label>
            </div>

            <div class="collapse" id="optionsList2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option2_1">
                    <label class="form-check-label" for="option2_1">Opcja 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option2_2">
                    <label class="form-check-label" for="option2_2">Opcja 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option2_3">
                    <label class="form-check-label" for="option2_3">Opcja 3</label>
                </div>
            </div>

            <div class="mt-2">
                <i class="bi bi-info-circle"></i>
                <span>Zaznaczono <span id="selectedOptionsCountBadge2" class="badge bg-success">0</span> opcji</span>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_Script ?>search.js"></script>
</html>