// Custom Cursor

new kursor({
    type: 4,
    removeDefaultCursor: true,
    color: '#F5F5F5'
})

// Fin Custom Cursor

// NAV

const hamburgerButton = document.querySelector(".nav-toggler")
const navigation = document.querySelector("nav")

hamburgerButton.addEventListener("click", toggleNav)

function toggleNav() {
    hamburgerButton.classList.toggle("active")
    navigation.classList.toggle("active")
}

// FIN NAV