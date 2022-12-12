describe("Menjawab pertanyaan FAQ dari User", () => {
    it("pertanyaan berhasil dijawab", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/faq");
        cy.get("#edit").click();
        cy.get("[id^=jawaban]").type("Tidak diperbolehkan");
        cy.contains("Submit").click();
    });
});

describe("Menghapus FAQ dari User", () => {
    it("FAQ berhasil dihapus", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/faq");
        cy.get("#hapus").click();
        cy.contains("OK").click();
    });
});

describe("Menghapus FAQ dari User", () => {
    it("FAQ gagal dihapus", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/faq");
        cy.get("#hapus").click();
        cy.contains("Cancel").click();
    });
});
