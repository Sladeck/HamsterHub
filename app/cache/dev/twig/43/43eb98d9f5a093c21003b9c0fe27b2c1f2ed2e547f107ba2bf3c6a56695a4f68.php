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
        $__internal_67ce2afe2d90c24f242bb04454c2e8eb02a2fe5bcd64212396c300807fd6aa47 = $this->env->getExtension("native_profiler");
        $__internal_67ce2afe2d90c24f242bb04454c2e8eb02a2fe5bcd64212396c300807fd6aa47->enter($__internal_67ce2afe2d90c24f242bb04454c2e8eb02a2fe5bcd64212396c300807fd6aa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_67ce2afe2d90c24f242bb04454c2e8eb02a2fe5bcd64212396c300807fd6aa47->leave($__internal_67ce2afe2d90c24f242bb04454c2e8eb02a2fe5bcd64212396c300807fd6aa47_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_947c51aca6b045ec89d55a453614c1685a12299490b7b0048187edf7f69acaab = $this->env->getExtension("native_profiler");
        $__internal_947c51aca6b045ec89d55a453614c1685a12299490b7b0048187edf7f69acaab->enter($__internal_947c51aca6b045ec89d55a453614c1685a12299490b7b0048187edf7f69acaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_947c51aca6b045ec89d55a453614c1685a12299490b7b0048187edf7f69acaab->leave($__internal_947c51aca6b045ec89d55a453614c1685a12299490b7b0048187edf7f69acaab_prof);

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
