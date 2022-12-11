describe("Halaman About", () => {
    it("halaman about berhasil dimuat", () => {
        cy.visit("http://127.0.0.1:8000/about");
    });
});

describe("Halaman About", () => {
    it("about list ditampilkan", () => {
        cy.visit("http://127.0.0.1:8000/about");
        cy.contains("Lokasi Terdekat").click();
        cy.contains("Dilengkapi Rute").click();
        cy.contains("Pencarian Cepat").click();
        cy.contains("Akses mudah").click();
    });
});
