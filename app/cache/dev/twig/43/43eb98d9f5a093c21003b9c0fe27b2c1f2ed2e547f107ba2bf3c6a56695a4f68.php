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
        $__internal_6b550207b15d1dc6ed5aeb741832bcf0085aa47850ef6fc535007a15c034ce87 = $this->env->getExtension("native_profiler");
        $__internal_6b550207b15d1dc6ed5aeb741832bcf0085aa47850ef6fc535007a15c034ce87->enter($__internal_6b550207b15d1dc6ed5aeb741832bcf0085aa47850ef6fc535007a15c034ce87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_6b550207b15d1dc6ed5aeb741832bcf0085aa47850ef6fc535007a15c034ce87->leave($__internal_6b550207b15d1dc6ed5aeb741832bcf0085aa47850ef6fc535007a15c034ce87_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_1997a5b179511f75b224abdd89befef6c0d0400ad98235c62314a506b6d6867e = $this->env->getExtension("native_profiler");
        $__internal_1997a5b179511f75b224abdd89befef6c0d0400ad98235c62314a506b6d6867e->enter($__internal_1997a5b179511f75b224abdd89befef6c0d0400ad98235c62314a506b6d6867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_1997a5b179511f75b224abdd89befef6c0d0400ad98235c62314a506b6d6867e->leave($__internal_1997a5b179511f75b224abdd89befef6c0d0400ad98235c62314a506b6d6867e_prof);

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
