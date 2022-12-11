describe("Halaman Filter", () => {
    it("data berhasil ditampilkan", () => {
        cy.visit("http://127.0.0.1:8000/tracking");
        cy.get("select").select(13).should("have.value", "Perdagangan");
        cy.contains("FILTER").click();
        cy.contains("Selengkapnya").click();
    });
});

describe("Halaman Filter", () => {
    it("data gagal ditampilkan", () => {
        cy.visit("http://127.0.0.1:8000/tracking");
        cy.get("select").select(11).should("have.value", "Pendidikan");
        cy.contains("FILTER").click();
    });
});
