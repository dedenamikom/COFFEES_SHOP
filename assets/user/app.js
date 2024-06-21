// Ambil elemen ikon keranjang dan tombol-tombol menutup serta checkout
const iconCart = document.querySelector('.icon-cart');
const closeBtn = document.querySelector('.btn .close');
const checkoutBtn = document.querySelector('.btn .checkOut');

// Inisialisasi jumlah item dalam keranjang
let itemCount = 0;

// Event listener untuk ikon keranjang
iconCart.addEventListener('click', function() {
    // Tampilkan atau sembunyikan cartTab ketika ikon keranjang diklik
    const cartTab = document.querySelector('.cartTab');
    cartTab.classList.toggle('show');
});

// Event listener untuk tombol close
closeBtn.addEventListener('click', function() {
    const cartTab = document.querySelector('.cartTab');
    cartTab.classList.remove('show');
});

// Event listener untuk tombol checkout
checkoutBtn.addEventListener('click', function() {
    // Redirect ke halaman checkout.html ketika tombol checkout diklik
    window.location.href = 'checkout.html';
});

// Ambil semua tombol tambah ke keranjang
const addToCartBtns = document.querySelectorAll('.coffee button');

// Event listener untuk setiap tombol tambah ke keranjang
addToCartBtns.forEach(btn => {
    btn.addEventListener('click', function() {
        // Tambahkan 1 ke jumlah item dalam keranjang
        itemCount++;
        // Perbarui tampilan jumlah item di ikon keranjang
        const cartItemCount = document.querySelector('.icon-cart span');
        cartItemCount.textContent = itemCount.toString();
    });
});
