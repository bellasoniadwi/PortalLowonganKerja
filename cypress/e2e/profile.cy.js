describe("Mengedit profile", () => {
    it("profile berhasil diupdate", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("lokerportaltrixsite");
            cy.get("[id^=password]").type("90475spidertrix#ambi");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/profile/1/edit");
        cy.get("[id^=nama]").clear().type("Super Admin");
        cy.get("[id^=username]").clear().type("lokerportaltrixsite");
        cy.get("[id^=no_telp]").clear().type("085231404775");
        cy.get("[id^=perusahaan]").clear().type("Portal Lowongan Pekerjaan");
        cy.get("[id^=email]").clear().type("ayianjani774@gmail.com");
        cy.get("[id^=password]").eq(0).type("90475spidertrix#ambi");
        cy.get("[id^=password_confirmation]")
            .eq(0)
            .type("90475spidertrix#ambi");
        cy.contains("Submit").click();
    });
});
