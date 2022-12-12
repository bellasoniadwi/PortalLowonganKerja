describe("Hapus Data Lowongan Pekerjaan", () => {
    it("data berhasil dihapus", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.get("#hapus").click();
        cy.contains("OK").click();
    });
});

describe("Hapus Data Lowongan Pekerjaan", () => {
    it("data gagal dihapus", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.get("#hapus").click();
        cy.contains("Cancel").click();
    });
});
