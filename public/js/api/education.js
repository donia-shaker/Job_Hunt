// userId
var userId = location.href.substring(location.href.lastIndexOf("/") + 1);

fetchData();

// Satrt fetch Data From API
async function fetchData() {
    await axios.get(`/api/education?userId=${userId}`).then((response) => {
        // console.log(response.data.data);
        var data = response.data.data;
        let i = 0;
        data.forEach((element) => {
            i++;
            el("tbody").innerHTML += `
                <tr class="p-5 my-3">
                <th scope="row">${i}</th>
                <td>${element.name}</td>
                <td>${element.place}</td>
                <td>${element.startDate}</td>
                <td>${element.endDate}</td>
                <td>
                    <a data-bs-toggle="modal" class="edit" data-bs-target="#update_education">
                    <i class="fas fa-pen" onclick="edit(${element.id})"></i></a>
                </td>
                <td>
                    <a class="text-danger" data-bs-toggle="modal" data-bs-target="#delete_education">
                    <i class="fas fa-trash-alt" onclick="deleteEducation(${element.id})"></i></a>
                </td>
            </tr>`;
        });
    });
}
// End fetch Data From API

// start Add Data
el("#add").addEventListener("click", function (e) {
    e.preventDefault();
    axios
        .post(`/api/education`, {
            name: el("#add_name").value,
            place: el("#add_place").value,
            startDate: el("#add_start_date").value,
            endDate: el("#add_end_date").value,
            userId: el("#user_id").value,
        })
        .then((response) => {
            // console.log(response);
            alertMessage(response.status, "insert");
            removeInputsValue("add_education");
            closeModal("add_education");
        })
        .catch(function (error) {
            if (error.response) {
                // console.log(error.response.data.errors);
                var errors = error.response.data.errors;
                Object.keys(errors).forEach((key) => {
                    el("#add_form [data-error='" + key + "']").innerText =
                        errors[key];
                });
            }
        });
});
// End Add Data

// Start Edit Data
function edit(educationId) {
    axios.get(`/api/education/${educationId}`).then((response) => {
        // console.log(response);
        el("#update_education_id").value = educationId;
        el("#update_name").value = response.data.data.name;
        el("#update_place").value = response.data.data.place;
        el("#update_start_date").value = response.data.data.startDate;
        el("#update_end_date").value = response.data.data.endDate;
    });
}
// End Edit Data

// Start Update Data
el("#update").addEventListener("click", function (e) {
    var educationId = el("#update_education_id").value;
    console.log(educationId);
    axios
        .put(`/api/education/${educationId}`, {
            id: educationId,
            name: el("#update_name").value,
            place: el("#update_place").value,
            startDate: el("#update_start_date").value,
            endDate: el("#update_end_date").value,
            userId: el("#update_user_id").value,
        })
        .then((response) => {
            // console.log(response);
            alertMessage(response.status, "Update");
            removeInputsValue("update_education");
            closeModal("update_education");
        })
        .catch(function (error) {
            if (error.response) {
                var errors = error.response.data.errors;
                Object.keys(errors).forEach((key) => {
                    el("#update_form [data-error='" + key + "']").innerText =
                        errors[key];
                });
            }
        });
});
// End Update Data

// Start Delete Function
function deleteEducation(educationId) {
    el("#delete").value = educationId;
}

el("#delete").addEventListener("click", (ele) => {
    educationId = el("#delete").value;
    axios.delete(`/api/education/${educationId}`).then((response) => {
        console.log(response);
        alertMessage(response.status, "Delete");
        closeModal("delete_education");
    });
});
// End Delete Function
