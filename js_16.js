document.addEventListener("DOMContentLoaded", function() {
    const users = [
        { firstName: "Alice", lastName: "Johnson", username: "alicej", roles: "Admin", email: "alice@email.com" },
        { firstName: "Bob", lastName: "Smith", username: "bobsmith", roles: "Moderator", email: "bob@email.com" }
        // Add more users here
    ];

    const tbody = document.querySelector("#usersTable tbody");

    function populateTable() {
        tbody.innerHTML = '';
        users.forEach(user => {
            tbody.innerHTML += `
                <tr>
                    <td>${user.firstName}</td>
                    <td>${user.lastName}</td>
                    <td>${user.username}</td>
                    <td>${user.roles}</td>
                    <td>${user.email}</td>
                    <td>
                        <button>Edit</button>
                        <button>Disable</button>
                        <button>Remove</button>
                    </td>
                </tr>
            `;
        });
    }

    populateTable();

    document.getElementById('searchBox').addEventListener('input', function(e) {
        const searchText = e.target.value.toLowerCase();
        const filteredUsers = users.filter(user =>
            user.firstName.toLowerCase().includes(searchText) ||
            user.lastName.toLowerCase().includes(searchText) ||
            user.username.toLowerCase().includes(searchText) ||
            user.roles.toLowerCase().includes(searchText) ||
            user.email.toLowerCase().includes(searchText)
        );
        
        tbody.innerHTML = '';
        filteredUsers.forEach(user => {
            tbody.innerHTML += `
                <tr>
                    <td>${user.firstName}</td>
                    <td>${user.lastName}</td>
                    <td>${user.username}</td>
                    <td>${user.roles}</td>
                    <td>${user.email}</td>
                    <td>
                        <button>Edit</button>
                        <button>Disable</button>
                        <button>Remove</button>
                    </td>
                </tr>
            `;
        });
    });
});
