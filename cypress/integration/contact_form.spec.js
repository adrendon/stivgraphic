describe('Contact form', () => {
  it('submits via ajax', () => {
    cy.intercept('POST', '**/send-mail.php', 'success').as('contact');
    cy.visit('contact-me.html');
    cy.get('#name').type('Test User');
    cy.get('#email').type('test@example.com');
    cy.get('#message').type('Hello from Cypress');
    cy.get('#contact-form').submit();
    cy.wait('@contact');
  });
});
