<?php

/* @App/base.html.twig */
class __TwigTemplate_863eaa948edaaeda62025625ae382defb2a333aabc7c881942e728d117a706e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4beca003917a452d82079ee1c3ee2e546df5aace4e9a5bdd8188af1f4a858f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4beca003917a452d82079ee1c3ee2e546df5aace4e9a5bdd8188af1f4a858f33->enter($__internal_4beca003917a452d82079ee1c3ee2e546df5aace4e9a5bdd8188af1f4a858f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        $__internal_9eaf8a9df6470a7501ef2a21ecaa783cca000cbe0a979f20bbfc44f6ac111a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eaf8a9df6470a7501ef2a21ecaa783cca000cbe0a979f20bbfc44f6ac111a4a->enter($__internal_9eaf8a9df6470a7501ef2a21ecaa783cca000cbe0a979f20bbfc44f6ac111a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title>Startsymfonies 2</title>

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">

\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Startsymfonies 2</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scan");
        echo "\">Launch scan</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start-all");
        echo "\">Start all</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stop-all");
        echo "\">Stop all</a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <div class=\"input-group mb-2 mb-sm-0\">
                <input id=\"search\" type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\">
                <a href=\"#\" class=\"input-group-addon fa fa-times\" id=\"clearSearch\"></a>
            </div>

            <div class=\"form-check\" style=\"margin-left: 10px;\">
                <label class=\"form-check-label navbar-text\">
                    <input id=\"flgHideStopped\" type=\"checkbox\" class=\"form-check-input\" checked>
                    Hide stopped>
                </label>
            </div>
        </form>
    </div>
</nav>

<div class=\"container-fluid\">
\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
\t";
        // line 67
        $this->loadTemplate("@App/templates/flashes.js.twig", "@App/base.html.twig", 67)->display($context);
        // line 68
        echo "</script>

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>";
        
        $__internal_4beca003917a452d82079ee1c3ee2e546df5aace4e9a5bdd8188af1f4a858f33->leave($__internal_4beca003917a452d82079ee1c3ee2e546df5aace4e9a5bdd8188af1f4a858f33_prof);

        
        $__internal_9eaf8a9df6470a7501ef2a21ecaa783cca000cbe0a979f20bbfc44f6ac111a4a->leave($__internal_9eaf8a9df6470a7501ef2a21ecaa783cca000cbe0a979f20bbfc44f6ac111a4a_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b11ba9f0786c3c0a06ac65f3b7ce295d7d2dc266046561265717fb306c4815a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b11ba9f0786c3c0a06ac65f3b7ce295d7d2dc266046561265717fb306c4815a->enter($__internal_5b11ba9f0786c3c0a06ac65f3b7ce295d7d2dc266046561265717fb306c4815a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31a3a5715617014e04e1eec875a822b453dcc061ecf1fc8329533b1f8e0fe5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a3a5715617014e04e1eec875a822b453dcc061ecf1fc8329533b1f8e0fe5b5->enter($__internal_31a3a5715617014e04e1eec875a822b453dcc061ecf1fc8329533b1f8e0fe5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31a3a5715617014e04e1eec875a822b453dcc061ecf1fc8329533b1f8e0fe5b5->leave($__internal_31a3a5715617014e04e1eec875a822b453dcc061ecf1fc8329533b1f8e0fe5b5_prof);

        
        $__internal_5b11ba9f0786c3c0a06ac65f3b7ce295d7d2dc266046561265717fb306c4815a->leave($__internal_5b11ba9f0786c3c0a06ac65f3b7ce295d7d2dc266046561265717fb306c4815a_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf0399e8fc4a74d86ed850516bbdd922cb399cf3e0bcfa5303cdc14014f80bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf0399e8fc4a74d86ed850516bbdd922cb399cf3e0bcfa5303cdc14014f80bd->enter($__internal_aaf0399e8fc4a74d86ed850516bbdd922cb399cf3e0bcfa5303cdc14014f80bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01e82a46effee57f3ab7acb0e3314c898eb7f3556b98f964bbb5c81b796b3c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e82a46effee57f3ab7acb0e3314c898eb7f3556b98f964bbb5c81b796b3c11->enter($__internal_01e82a46effee57f3ab7acb0e3314c898eb7f3556b98f964bbb5c81b796b3c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01e82a46effee57f3ab7acb0e3314c898eb7f3556b98f964bbb5c81b796b3c11->leave($__internal_01e82a46effee57f3ab7acb0e3314c898eb7f3556b98f964bbb5c81b796b3c11_prof);

        
        $__internal_aaf0399e8fc4a74d86ed850516bbdd922cb399cf3e0bcfa5303cdc14014f80bd->leave($__internal_aaf0399e8fc4a74d86ed850516bbdd922cb399cf3e0bcfa5303cdc14014f80bd_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc5dc17c445b3f63ede339b70d4228e4e68afe596dc2e19c2fa7f3ac6153ddf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5dc17c445b3f63ede339b70d4228e4e68afe596dc2e19c2fa7f3ac6153ddf9->enter($__internal_dc5dc17c445b3f63ede339b70d4228e4e68afe596dc2e19c2fa7f3ac6153ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9f3613ec58511c1f86f06cfc80f98a447f52e21e7b0fdacab6a888e5bb477dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3613ec58511c1f86f06cfc80f98a447f52e21e7b0fdacab6a888e5bb477dd2->enter($__internal_9f3613ec58511c1f86f06cfc80f98a447f52e21e7b0fdacab6a888e5bb477dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f3613ec58511c1f86f06cfc80f98a447f52e21e7b0fdacab6a888e5bb477dd2->leave($__internal_9f3613ec58511c1f86f06cfc80f98a447f52e21e7b0fdacab6a888e5bb477dd2_prof);

        
        $__internal_dc5dc17c445b3f63ede339b70d4228e4e68afe596dc2e19c2fa7f3ac6153ddf9->leave($__internal_dc5dc17c445b3f63ede339b70d4228e4e68afe596dc2e19c2fa7f3ac6153ddf9_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 70,  150 => 55,  133 => 16,  122 => 71,  120 => 70,  116 => 68,  114 => 67,  101 => 56,  99 => 55,  76 => 35,  70 => 32,  64 => 29,  50 => 17,  48 => 16,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <title>Startsymfonies 2</title>

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">

\t{% block stylesheets %}{% endblock %}
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Startsymfonies 2</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('scan') }}\">Launch scan</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('start-all') }}\">Start all</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('stop-all') }}\">Stop all</a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <div class=\"input-group mb-2 mb-sm-0\">
                <input id=\"search\" type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\">
                <a href=\"#\" class=\"input-group-addon fa fa-times\" id=\"clearSearch\"></a>
            </div>

            <div class=\"form-check\" style=\"margin-left: 10px;\">
                <label class=\"form-check-label navbar-text\">
                    <input id=\"flgHideStopped\" type=\"checkbox\" class=\"form-check-input\" checked>
                    Hide stopped>
                </label>
            </div>
        </form>
    </div>
</nav>

<div class=\"container-fluid\">
\t{% block body %}{% endblock %}
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
\t{% include '@App/templates/flashes.js.twig' %}
</script>

{% block javascripts %}{% endblock %}
</body>
</html>", "@App/base.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/src/AppBundle/Resources/views/base.html.twig");
    }
}
