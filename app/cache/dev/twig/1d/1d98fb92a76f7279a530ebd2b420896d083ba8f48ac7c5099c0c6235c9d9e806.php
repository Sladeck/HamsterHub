<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35be830cce3d55a90bfabeff7424c385f6774fa7aa27e9552e4f4b7f3560dc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ccf5aee4f18ddcb7e6632b11c82cff97a59dc4bd0fa1bde7d1a20af550316ca = $this->env->getExtension("native_profiler");
        $__internal_0ccf5aee4f18ddcb7e6632b11c82cff97a59dc4bd0fa1bde7d1a20af550316ca->enter($__internal_0ccf5aee4f18ddcb7e6632b11c82cff97a59dc4bd0fa1bde7d1a20af550316ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0ccf5aee4f18ddcb7e6632b11c82cff97a59dc4bd0fa1bde7d1a20af550316ca->leave($__internal_0ccf5aee4f18ddcb7e6632b11c82cff97a59dc4bd0fa1bde7d1a20af550316ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
