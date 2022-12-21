describe("Halaman FAQ", () => {
    it("halaman faq berhasil dimuat", () => {
        cy.visit("http://127.0.0.1:8000/faqs");
    });
});

describe("Menanyakan pertnyaan yang belum terjawab pada list FAQ", () => {
    it("pertanyaan berhasil dikirim", () => {
        cy.visit("http://127.0.0.1:8000/faqs");
        cy.contains(
            "Tidak Menemukan Pertanyaan yang Dicari? Tanyakan Sekarang!"
        ).click();
        cy.get("textarea").type(
            "Bolehkah kontributor memiliki dua akun dengan username yang sama?"
        );
        cy.contains("Submit").click();
    });
});
