// const container= document.querySelector('.container');
// const registerBtn = document.querySelector('.register.btn');
// const login = document.querySelector('.login.btn');

// registerBtn.addEventListener('click',()=>{
//     container.classList.add('active');
// })



// login.addEventListener('click',()=>{
//     container.classList.remove('active');
// })

  const container = document.getElementById("container");
  document.querySelector(".register-btn").onclick = () => container.classList.add("active");
  document.querySelector(".login-btn").onclick = () => container.classList.remove("active");