const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});


const inputUsernameRegister = document.querySelector(".text");
const inputPasswordRegister = document.querySelector(".pass");
const inputEmailRegister = document.querySelector(".email")
const btnRegister = document.querySelector("button");
btnRegister.addEventListener("click", (e) => {
    e.preventDefault();
    if (
        inputUsernameRegister.value === "" ||
        inputEmailRegister.value ==="" ||
        inputPasswordRegister.value === ""
    ) {
        alert("vui lòng không để trống");
    } else {
        // array user
        const user = {
            username: inputUsernameRegister.value,
            email:inputEmailRegister.value,
            password: inputPasswordRegister.value,
        };
        let json = JSON.stringify(user);
        localStorage.setItem(inputUsernameRegister.value, json);
        alert("Đăng Ký Thành Công");
    }
});

// const inputUsernameLogIn = document.querySelector(".email");
// const inputPasswordLogIn = document.querySelector(".pass");
// const btnLogIn = document.querySelector("button");
// btnRegister.addEventListener("click", (e) => {
//   e.preventDefault();
//   if (
//     inputUsernameLogIn.value === "" ||
//     inputPasswordLogIn.value === ""
//   ) {
//     alert("vui lòng không để trống");
//   } else {
//     // array user
//     const user = {
//       username: inputUsernameLogIn.value,
//       password: inputPasswordLogIn.value,
//     };
//     let json = JSON.stringify(user);
//     localStorage.setItem(inputUsernameLogIn.value, json);
//     alert("Đăng Ký Thành Công");
//   }
// });
