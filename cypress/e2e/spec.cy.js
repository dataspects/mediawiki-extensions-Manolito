describe("dataspects", () => {
  let login = ["admin", "manolito2000"];
  it("should load the Manolito special page", () => {
    cy.mediawiki_login(login[0], login[1]);
    cy.visit("/wiki/Special:Manolito");
  });
});
