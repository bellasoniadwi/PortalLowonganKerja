describe("Tambah Data Lowongan Pekerjaan", () => {
    it("data berhasil ditambahkan", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.contains("+ Tambah").click();
        cy.get("input#y").type("112.66909673720012", { force: true });
        Cypress.on("uncaught:exception", (err, runnable) => {
            return false;
        });
        cy.get("input#x").type("-7.66909673720012", { force: true });
        cy.get("[id^=nama_pekerjaan]").type("Marketing Manager");
        cy.get("[id^=jam_kerja]").type("6jam/hari");
        cy.get("[id^=gaji]").type("5000000");
        cy.get("[id^=deskripsi]").type(
            "Dicari seseorang yang mampu menyusun perencanaan strategi dan laporan bisnis"
        );
        cy.get("select#kategori")
            .select(13)
            .should("have.value", "Perdagangan");
        cy.get("select#tipe_pekerjaan")
            .select(2)
            .should("have.value", "Full Time");
        cy.get("input[type=file]").selectFile("cafe.jpg");

        cy.contains("Submit").click();
    });
});

describe("Tambah Data Lowongan Pekerjaan", () => {
    it("data gagal ditambahkan", () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get("form").within(() => {
            cy.get("[id^=username]").type("ambi123");
            cy.get("[id^=password]").type("ambi123");
        });
        cy.contains("Sign In").click();
        cy.visit("http://127.0.0.1:8000/dashboard/lowonganpekerjaan");
        cy.contains("+ Tambah").click();
        cy.get("input#y").type("112.66909673720012", { force: true });
        Cypress.on("uncaught:exception", (err, runnable) => {
            return false;
        });
        cy.get("input#x").type("-7.66909673720012", { force: true });
        cy.get("[id^=nama_pekerjaan]").type("Accounting Officer");
        cy.get("[id^=jam_kerja]").type("8jam/hari");
        cy.get("[id^=gaji]").type("5000000");
        cy.get("[id^=deskripsi]").type("Dicari pegawai");
        cy.get("select#kategori")
            .select(13)
            .should("have.value", "Perdagangan");
        cy.get("select#tipe_pekerjaan")
            .select(2)
            .should("have.value", "Full Time");
        cy.get("input[type=file]").selectFile("file.txt");

        cy.contains("Submit").click();
    });
});
