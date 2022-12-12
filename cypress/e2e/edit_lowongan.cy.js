describe("Edit Data Lowongan Pekerjaan", () => {
    it("data berhasil diedit", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.get("#edit").click();
        cy.get("[id^=nama_pekerjaan]").clear().type("Kasir");
        cy.get("select#kategori")
            .select(12)
            .should("have.value", "Perdagangan");
        cy.get("[id^=jam_kerja]").clear().type("4jam/hari");
        cy.get("[id^=gaji]").clear().type("1000000");
        cy.get("select#tipe_pekerjaan")
            .select(0)
            .should("have.value", "Part Time");
        cy.get("[id^=deskripsi]")
            .clear()
            .type(
                "Dicari seseorang yang mampu menyusun perencanaan strategi dan laporan bisnis"
            );
        cy.contains("Submit").click();
    });
});

describe("Edit Data Lowongan Pekerjaan", () => {
    it("data gagal diedit", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.get("#edit").click();
        cy.get("[id^=nama_pekerjaan]").clear().type("Kasir");
        cy.get("select#kategori")
            .select(12)
            .should("have.value", "Perdagangan");
        cy.get("[id^=jam_kerja]").clear().type("4jam/hari");
        cy.get("[id^=gaji]").clear().type("1000000");
        cy.get("select#tipe_pekerjaan")
            .select(0)
            .should("have.value", "Part Time");
        cy.get("[id^=deskripsi]").clear().type("Dicari ");
        cy.contains("Submit").click();
    });
});
