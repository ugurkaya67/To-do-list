document.addEventListener("DOMContentLoaded", () => {
    // Marquer une tâche comme terminée
    document.querySelectorAll(".checkbox a").forEach((checkbox) => {
        checkbox.addEventListener("click", function (e) {
            e.preventDefault();
            const taskId = this.getAttribute("href").split("=")[1];
            
            fetch(`toggle_task.php?id=${taskId}`)
                .then(response => response.text())
                .then(() => {
                    // Mettre à jour l'apparence de la tâche
                    this.innerHTML = this.innerHTML.includes("✔️") ? "⬜" : "✔️";
                    this.closest("li").classList.toggle("completed");
                })
                .catch(error => console.error("Erreur:", error));
        });
    });
});
