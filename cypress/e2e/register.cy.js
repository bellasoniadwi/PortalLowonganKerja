describe("Register Kontributor dengan data valid", () => {
    it("register berhasil", () => {
        cy.visit("http://127.0.0.1:8000/register");
        cy.get("form").within(() => {
            cy.get("[id^=nama]").type("Anjani Dwilestari");
            cy.get("[id^=username]").type("anjani123");
            cy.get("[id^=email]").type("anjani123@gmail.com");
            cy.get("[id^=no_telp]").type("086341098664");
            cy.get("[id^=perusahaan]").type("AANS Store");
            cy.get("[id^=password]").eq(0).type("anjani123");
            cy.get("[id^=password_confirmation]").eq(0).type("anjani123");
        });
        cy.contains("Daftar").click();
    });
});

describe("Register Kontributor dengan data username, email, no telepon yang sama", () => {
    it("register gagal", () => {
        cy.visit("http://127.0.0.1:8000/register");
        cy.get("form").within(() => {
            cy.get("[id^=nama]").type("Anjani Dwilestari");
            cy.get("[id^=username]").type("anjani123");
            cy.get("[id^=email]").type("anjani123@gmail.com");
            cy.get("[id^=no_telp]").type("086341098664");
            cy.get("[id^=perusahaan]").type("AANS Store");
            cy.get("[id^=password]").eq(0).type("anjani123");
            cy.get("[id^=password_confirmation]").eq(0).type("anjani123");
        });
        cy.contains("Daftar").click();
    });
});

describe("Register Kontributor dengan data invalid email", () => {
    it("register gagal", () => {
        cy.visit("http://127.0.0.1:8000/register");
        cy.get("form").within(() => {
            cy.get("[id^=nama]").type("Anjani Dwilestari");
            cy.get("[id^=username]").type("anjani1234");
            cy.get("[id^=email]").type("anjani123gmail");
            cy.get("[id^=no_telp]").type("085230598771");
            cy.get("[id^=perusahaan]").type("AANS Store");
            cy.get("[id^=password]").eq(0).type("anjani123");
            cy.get("[id^=password_confirmation]").eq(0).type("anjani123");
        });
        cy.contains("Daftar").click();
    });
});

describe("Register Kontributor dengan data invalid konfirmasi password", () => {
    it("register gagal", () => {
        cy.visit("http://127.0.0.1:8000/register");
        cy.get("form").within(() => {
            cy.get("[id^=nama]").type("Anjani Dwilestari");
            cy.get("[id^=username]").type("anjani1234");
            cy.get("[id^=email]").type("anjani1234@gmail.com");
            cy.get("[id^=no_telp]").type("085230598771");
            cy.get("[id^=perusahaan]").type("AANS Store");
            cy.get("[id^=password]").eq(0).type("anjani123");
            cy.get("[id^=password_confirmation]").eq(0).type("anjani1234");
        });
        cy.contains("Daftar").click();
    });
});

describe("Register Kontributor dengan data invalid nomor telepon", () => {
    it("register gagal", () => {
        cy.visit("http://127.0.0.1:8000/register");
        cy.get("form").within(() => {
            cy.get("[id^=nama]").type("Anjani Dwilestari");
            cy.get("[id^=username]").type("anjani1234");
            cy.get("[id^=email]").type("anjani1234@gmail.com");
            cy.get("[id^=no_telp]").type("086341098664990990");
            cy.get("[id^=perusahaan]").type("AANS Store");
            cy.get("[id^=password]").eq(0).type("anjani123");
            cy.get("[id^=password_confirmation]").eq(0).type("anjani123");
        });
        cy.contains("Daftar").click();
    });
});
