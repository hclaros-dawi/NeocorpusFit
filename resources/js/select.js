document.addEventListener("DOMContentLoaded", function () {
    const selectWrappers = document.querySelectorAll(".custom-select-wrapper");

    selectWrappers.forEach((wrapper) => {
        const trigger = wrapper.querySelector(".custom-select");
        const valueDisplay = trigger.querySelector(".custom-select-value");
        const optionsContainer = wrapper.querySelector(
            ".custom-select-options"
        );
        const options = optionsContainer.querySelectorAll(
            ".custom-select-option"
        );
        const hiddenInput = wrapper.querySelector('input[type="hidden"]');

        trigger.addEventListener("click", (e) => {
            e.stopPropagation();
            closeAllDropdowns(wrapper);
            trigger.classList.toggle("is-open");
            optionsContainer.classList.toggle("is-open");
            trigger.classList.toggle(
                "is-focused",
                trigger.classList.contains("is-open")
            );
        });

        options.forEach((option) => {
            option.addEventListener("click", () => {
                const selectedValue = option.getAttribute("data-value");
                const selectedText = option.textContent;

                valueDisplay.textContent = selectedText;
                hiddenInput.value = selectedValue;

                options.forEach((opt) => opt.classList.remove("is-selected"));
                option.classList.add("is-selected");

                trigger.classList.remove("is-open", "is-focused");
                optionsContainer.classList.remove("is-open");

                const changeEvent = new Event("change", { bubbles: true });
                hiddenInput.dispatchEvent(changeEvent);
            });
        });

        trigger.addEventListener("keydown", (e) => {
            if (e.key === "Enter" || e.key === " ") {
                e.preventDefault();
                trigger.click();
            }
            if (e.key === "Escape" && trigger.classList.contains("is-open")) {
                closeAllDropdowns();
            }
        });

        options.forEach((option) => option.setAttribute("tabindex", "-1"));
    });

    document.addEventListener("click", () => {
        closeAllDropdowns();
    });

    function closeAllDropdowns(excludeWrapper = null) {
        selectWrappers.forEach((wrapper) => {
            if (wrapper !== excludeWrapper) {
                const trigger = wrapper.querySelector(".custom-select");
                const optionsContainer = wrapper.querySelector(
                    ".custom-select-options"
                );
                trigger.classList.remove("is-open", "is-focused");
                optionsContainer.classList.remove("is-open");
            }
        });
    }
});
