<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2a08afdf2ccf9b76f7b849b4a2606cf0f33a6c35eabcfcfd2925c82fb351be11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae66044bde05135a63302f8e96942b3177f819f75d6ac2bc0ee8eb230f744ae1 = $this->env->getExtension("native_profiler");
        $__internal_ae66044bde05135a63302f8e96942b3177f819f75d6ac2bc0ee8eb230f744ae1->enter($__internal_ae66044bde05135a63302f8e96942b3177f819f75d6ac2bc0ee8eb230f744ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae66044bde05135a63302f8e96942b3177f819f75d6ac2bc0ee8eb230f744ae1->leave($__internal_ae66044bde05135a63302f8e96942b3177f819f75d6ac2bc0ee8eb230f744ae1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38ccee1994a34d863c1949a766a1290ca7775b628849793c6c06bb194dcf3a30 = $this->env->getExtension("native_profiler");
        $__internal_38ccee1994a34d863c1949a766a1290ca7775b628849793c6c06bb194dcf3a30->enter($__internal_38ccee1994a34d863c1949a766a1290ca7775b628849793c6c06bb194dcf3a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_38ccee1994a34d863c1949a766a1290ca7775b628849793c6c06bb194dcf3a30->leave($__internal_38ccee1994a34d863c1949a766a1290ca7775b628849793c6c06bb194dcf3a30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
