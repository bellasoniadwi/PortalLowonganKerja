describe("Radius Maps 10 KM", () => {
    it("radius maps berhasil", () => {
        cy.visit("http://127.0.0.1:8000/");
        cy.get("[id^=command1]").check();
    });
});

describe("Radius Maps 5 KM", () => {
    it("radius maps berhasil", () => {
        cy.visit("http://127.0.0.1:8000/");
        cy.get("[id^=command2]").check();
    });
});

describe("Radius Maps 3 KM", () => {
    it("radius maps berhasil", () => {
        cy.visit("http://127.0.0.1:8000/");
        cy.get("[id^=command3]").check();
    });
});

describe("Radius Maps 0 KM", () => {
    it("radius maps berhasil", () => {
        cy.visit("http://127.0.0.1:8000/");
        cy.get("[id^=command0]").check();
    });
});
