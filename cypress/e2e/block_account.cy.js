describe("Memblokir Akun Perusahaan", () => {
    it("blokir berhasil", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/perusahaan");
        cy.get("[id^=checkbox]").uncheck();
    });
});

describe("Membuka blokir Akun Perusahaan", () => {
    it("buka blokir berhasil", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/perusahaan");
        cy.get("[id^=checkbox]").check();
    });
});
