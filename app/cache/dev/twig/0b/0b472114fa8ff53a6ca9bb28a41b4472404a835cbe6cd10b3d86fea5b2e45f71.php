<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_aa1720b836b3b7bc412edd3cba82bff7dfb89dcc9b6cc48e0e41f81a02e12a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_411bb3296723f56c882a52c11cf52a5348a81211ca44e1729e231ad6ff89ce37 = $this->env->getExtension("native_profiler");
        $__internal_411bb3296723f56c882a52c11cf52a5348a81211ca44e1729e231ad6ff89ce37->enter($__internal_411bb3296723f56c882a52c11cf52a5348a81211ca44e1729e231ad6ff89ce37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_411bb3296723f56c882a52c11cf52a5348a81211ca44e1729e231ad6ff89ce37->leave($__internal_411bb3296723f56c882a52c11cf52a5348a81211ca44e1729e231ad6ff89ce37_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d66ad7cd7fabb1e20b64ac78793f874a3d836feb1252bc1f108b9073baafc7c = $this->env->getExtension("native_profiler");
        $__internal_5d66ad7cd7fabb1e20b64ac78793f874a3d836feb1252bc1f108b9073baafc7c->enter($__internal_5d66ad7cd7fabb1e20b64ac78793f874a3d836feb1252bc1f108b9073baafc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5d66ad7cd7fabb1e20b64ac78793f874a3d836feb1252bc1f108b9073baafc7c->leave($__internal_5d66ad7cd7fabb1e20b64ac78793f874a3d836feb1252bc1f108b9073baafc7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
