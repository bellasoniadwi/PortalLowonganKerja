describe("Cari pada Maps", () => {
    it("pencarian berhasil", () => {
        cy.visit("http://127.0.0.1:8000/");
        cy.get(".search-button").click();
        cy.get("[id^=searchtext9]").type("Pelayan");
        cy.get(".search-button").click();
        cy.get(".search-tip").click();
    });
});

describe("Cari pada Maps", () => {
    it("pencarian gagal", () => {
        cy.visit("http://127.0.0.1:8000/");
        cy.get(".search-button").click();
        cy.get("[id^=searchtext9]").type("Bandit");
        cy.get(".search-button").click();
    });
});
