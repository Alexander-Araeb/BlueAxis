const validation = new JustValidate("#register")

validation
    .addField("#firstname", [
        {
            rule: "required"
        }
    ])
    .addField("#lastname", [
        {
            rule: "required"
        }
    ])
    .addField("#phone", [
        {
            rule: "required"
        }
    ])
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        {
            validator: (value) => () => {
                return fetch("validate-email.php?email=" +
                encodeURIComponent(value))
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(json) {
                        return json.available;
                    });
            },
            errorMessage: "Email already registered"
        }
    ])
    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    .addField("#repeat_password", [
        {
            rule: "required"
        },
        {
            validator: (value, fields) => {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "Passwords should match"
        }
    ])
    .addField("#meterID", [
        {
            rule: "required"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("register").submit();
    });