<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_919357ca24ab610261dcde0d3e5d35cef702a747622dd5929c3e21d39c4c8545 extends Twig_Template
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
        $__internal_fb00efb97df92c9994ce6a6acefe636104c25e57b6efd8f1dcd414aa39597510 = $this->env->getExtension("native_profiler");
        $__internal_fb00efb97df92c9994ce6a6acefe636104c25e57b6efd8f1dcd414aa39597510->enter($__internal_fb00efb97df92c9994ce6a6acefe636104c25e57b6efd8f1dcd414aa39597510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fb00efb97df92c9994ce6a6acefe636104c25e57b6efd8f1dcd414aa39597510->leave($__internal_fb00efb97df92c9994ce6a6acefe636104c25e57b6efd8f1dcd414aa39597510_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
