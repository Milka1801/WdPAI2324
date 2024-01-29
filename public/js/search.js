console.log("Przed fetch");

const search = document.querySelector('input[placeholder="search project"]');
const projectsContainer = document.querySelector(".my-recipes");


search.addEventListener("input", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        // fetch("/search", {
        //     method: "POST",
        //     headers: {
        //         'Content-Type': 'application/json'
        //     },
        //     body: JSON.stringify(data)
        // }).then(function (response) {
        //     return response.json();
        // }).then(function (projects) {
        //     projectsContainer.innerHTML = "";
        //
        //     loadProjects(projects)
        // });

        console.log("Przed fetch");

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(function (response) {
                console.log("Odpowiedź z serwera:", response);
                return response.json();
            })
            .then(function (projects) {
                console.log("Otrzymane projekty:", projects);
                projectsContainer.innerHTML = "";
                loadProjects(projects);
            })
            .catch(function (error) {
                console.error("Błąd fetch:", error);
            });

    }
});

function loadProjects(projects) {
    projects.forEach(project => {
        console.log(project);
        createProject(project);
    });
}


function createProject(project) {
    const template = document.querySelector("#project-template");

    const clone = template.content.cloneNode(true);
    const div = clone.querySelector("div");
    div.id = project.id;
    const image = clone.querySelector("img");
    image.src = `/public/uploads/${project.image}`;
    const title = clone.querySelector("h3");
    title.innerHTML = project.title;
    const description = clone.querySelector("p");
    description.innerHTML = project.description;


    projectContainer.appendChild(clone);
}
