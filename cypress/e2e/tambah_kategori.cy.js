describe("Tambah Data Kategori Lowongan Pekerjaan", () => {
    it("data berhasil ditambahkan", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/kategori");
        cy.contains("+ Tambah").click();
        cy.get("[id^=nama_kategori]").type("Seni Budaya");
        cy.contains("Submit").click();
    });
});
