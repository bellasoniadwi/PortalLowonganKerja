describe("Melihat Lowongan Pekerjaan Aktif", () => {
    it("lowongan tersedia", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
    });
});

describe("Melihat arsipan Lowongan Pekerjaan", () => {
    it("arsipan tersedia", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/arsiplowonganpekerjaan");
    });
});

describe("Mengarsipan Lowongan Pekerjaan", () => {
    it("lowongan diarsipkan", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.get("[id^=checkbox]").uncheck();
    });
});

describe("Mengaktifkan Lowongan Pekerjaan", () => {
    it("lowongan diaktifkan", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.get("[id^=checkbox]").check();
    });
});
