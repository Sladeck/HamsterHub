<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_733d4d923f95e1fb956edae21c887333c8340a3a0e599509f33e4b30a7b068c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_f7069876742008a72981c3d0200a341890fa3023b640076ed226979677407e58 = $this->env->getExtension("native_profiler");
        $__internal_f7069876742008a72981c3d0200a341890fa3023b640076ed226979677407e58->enter($__internal_f7069876742008a72981c3d0200a341890fa3023b640076ed226979677407e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7069876742008a72981c3d0200a341890fa3023b640076ed226979677407e58->leave($__internal_f7069876742008a72981c3d0200a341890fa3023b640076ed226979677407e58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91ee3bdb15edd72a6aff584a46c6e7771ccc4cf6e41fce9ec11a2192f61692fa = $this->env->getExtension("native_profiler");
        $__internal_91ee3bdb15edd72a6aff584a46c6e7771ccc4cf6e41fce9ec11a2192f61692fa->enter($__internal_91ee3bdb15edd72a6aff584a46c6e7771ccc4cf6e41fce9ec11a2192f61692fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_91ee3bdb15edd72a6aff584a46c6e7771ccc4cf6e41fce9ec11a2192f61692fa->leave($__internal_91ee3bdb15edd72a6aff584a46c6e7771ccc4cf6e41fce9ec11a2192f61692fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
