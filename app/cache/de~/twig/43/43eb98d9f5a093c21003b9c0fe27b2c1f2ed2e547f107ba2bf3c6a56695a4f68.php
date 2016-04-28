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
        $__internal_106e6119e3a53d7ab25ac3f1187991e904f3f778e1a2856dc2f2357f8adbe749 = $this->env->getExtension("native_profiler");
        $__internal_106e6119e3a53d7ab25ac3f1187991e904f3f778e1a2856dc2f2357f8adbe749->enter($__internal_106e6119e3a53d7ab25ac3f1187991e904f3f778e1a2856dc2f2357f8adbe749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_106e6119e3a53d7ab25ac3f1187991e904f3f778e1a2856dc2f2357f8adbe749->leave($__internal_106e6119e3a53d7ab25ac3f1187991e904f3f778e1a2856dc2f2357f8adbe749_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_6c984dd4bc08f970a230551eb1ef7b99ef2103a33368f8a5479d7a66f4cf3247 = $this->env->getExtension("native_profiler");
        $__internal_6c984dd4bc08f970a230551eb1ef7b99ef2103a33368f8a5479d7a66f4cf3247->enter($__internal_6c984dd4bc08f970a230551eb1ef7b99ef2103a33368f8a5479d7a66f4cf3247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_6c984dd4bc08f970a230551eb1ef7b99ef2103a33368f8a5479d7a66f4cf3247->leave($__internal_6c984dd4bc08f970a230551eb1ef7b99ef2103a33368f8a5479d7a66f4cf3247_prof);

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
