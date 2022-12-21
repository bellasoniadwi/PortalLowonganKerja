describe("Login Kontributor dengan valid username dan valid password", () => {
    it("login berhasil", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
    });
});

describe("Login Kontributor dengan valid username dan invalid password", () => {
    it("login gagal", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi1234");
        });
        cy.contains("Sign In").click();
    });
});

describe("Login Kontributor dengan invalid username dan valid password", () => {
    it("login gagal", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi1234");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
    });
});

describe("Login Kontributor dengan invalid username dan invalid password", () => {
    it("login gagal", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi1234");
            cy.get("[id^=password]").type("ambi1234");
        });
        cy.contains("Sign In").click();
    });
});
