<?php

/* HamsterHubBundle:Base:footer.html.twig */
class __TwigTemplate_b5c82734de5ba3acfa0558fdb3ba916a087ace3c50025536fc41a911fb0aaccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c466a83a66e72e547563e25c3925baf51a6d25be3d70883e24c932a390cfa651 = $this->env->getExtension("native_profiler");
        $__internal_c466a83a66e72e547563e25c3925baf51a6d25be3d70883e24c932a390cfa651->enter($__internal_c466a83a66e72e547563e25c3925baf51a6d25be3d70883e24c932a390cfa651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_c466a83a66e72e547563e25c3925baf51a6d25be3d70883e24c932a390cfa651->leave($__internal_c466a83a66e72e547563e25c3925baf51a6d25be3d70883e24c932a390cfa651_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_6e208504f8a1fce10085db2ff1175660301709c81bc5b9a674f832a8de855644 = $this->env->getExtension("native_profiler");
        $__internal_6e208504f8a1fce10085db2ff1175660301709c81bc5b9a674f832a8de855644->enter($__internal_6e208504f8a1fce10085db2ff1175660301709c81bc5b9a674f832a8de855644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_6e208504f8a1fce10085db2ff1175660301709c81bc5b9a674f832a8de855644->leave($__internal_6e208504f8a1fce10085db2ff1175660301709c81bc5b9a674f832a8de855644_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block footer %}*/
/*   <footer>*/
/*   <span>created by Clem Ferreol & Guillaume Moulin</span>*/
/* */
/*   </footer>*/
/* {% endblock %}*/
/* */
