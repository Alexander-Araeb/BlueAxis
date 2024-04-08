const validation = new JustValidate("#contact")

validation
    .addField("#_name", [
        {
            rule: "required"
        }
    ])
    .addField("#_phone", [
        {
            rule: "required"
        }
    ])
    .addField("#_email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        }
    ])
    .addField("#_message", [
        {
            rule: "required"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("contact").submit();
    });