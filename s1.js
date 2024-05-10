$(document).ready(function () {
    let draggableObjects;
    let dropPoints;
    const startButton = $("#start");
    const result = $("#result");
    const controls = $(".controls-container");
    const dragContainer = $(".draggable-objects");
    const dropContainer = $(".drop-points");
    const timer = $("#timer"); // Select the timer div
    const data = [
        "cat", "dog", "bird", "frog", "fish", "eagle", "butterfly", "elephant", "lion", "snake"
    ];

    let count = 0;
    let timeLeft = 60; // Set the initial time to 20 seconds
    let timerInterval;

    // Timer function
    const startTimer = () => {
        timerInterval = setInterval(() => {
            timeLeft -= 1;
            timer.text(`Time Left: ${timeLeft}s`);

            if (timeLeft === 0) {
                clearInterval(timerInterval);
                timer.text("Time's Up!");
                controls.removeClass("hide");
                startButton.text("Retry");
                startButton.removeClass("hide");
                startButton.off("click").on("click", function () {
                    location.reload(); // Reload the page to retry
                });
            }
        }, 1000);
    };

    // Reset timer function
    const resetTimer = () => {
        clearInterval(timerInterval);
        timeLeft = 60;
        timer.text(`Time Left: ${timeLeft}s`);
    };

    // This are the drag and drop functions
    const drop = (event, ui) => {
        const draggedElementData = ui.draggable.attr("id");
        const droppableElementData = $(event.target).attr("data-id");
        if (draggedElementData === droppableElementData) {
            $(event.target).addClass("dropped");
            ui.draggable.hide();
            ui.draggable.draggable("disable");
            $(event.target).empty();
            $(event.target).append(`<img src="animals/${draggedElementData}.png">`);
            $(event.target).css("background-color", "#9effa8");

            count += 1;
        } else {
            // Add red color if dropped on the wrong container
            $(event.target).css("background-color", "#ff6961"); // Red color
            setTimeout(() => {
                $(event.target).css("background-color", ""); // Reset color after 1 second
            }, 1000);
        }

        if (count === 5) {
            result.text("You Won!");
            clearInterval(timerInterval); // Stop the timer
            controls.removeClass("hide");
            startButton.text("Proceed to Level 2");
            startButton.removeClass("hide");
            startButton.off("click").on("click", function () {
                window.location.href = "game2.php";
            });
        }
    };

    const creator = () => {
        dragContainer.empty();
        dropContainer.empty();
        let randomData = [];

        for (let i = 1; i <= 5; i++) {
            let randomValue = randomValueGenerator();
            if (!randomData.includes(randomValue)) {
                randomData.push(randomValue);
            } else {
                i -= 1;
            }
        }

        for (let i of randomData) {
            const flagDiv = $("<div>", {
                class: "draggable-image",
                draggable: true,
                id: i
            }).html(`<img src="animals/${i}.png">`);
            dragContainer.append(flagDiv);
        }

        randomData = randomData.sort(() => 0.5 - Math.random());
        for (let i of randomData) {
            const countryDiv = $("<div>", {
                class: "countries",
                "data-id": i
            }).html(`${i.charAt(0).toUpperCase() + i.slice(1).replace("-", "")}`);
            dropContainer.append(countryDiv);
        }

        draggableObjects = $(".draggable-image"); // Update draggable objects
        dropPoints = $(".countries"); // Update drop points
    };

    const randomValueGenerator = () => {
        return data[Math.floor(Math.random() * data.length)];
    };

    startButton.on("click", function () {
        controls.addClass("hide");
        resetTimer(); // Reset the timer before starting
        startTimer(); // Start the timer
        creator(); // Moved this here to ensure draggable objects and drop points are created after starting the timer
        count = 0;

        draggableObjects.draggable({
            revert: "invalid",
            zIndex: 100,
            start: function (event, ui) {
                $(this).css("z-index", 101);
            }
        });

        dropPoints.droppable({
            accept: ".draggable-image",
            drop: drop
        });
    });
});

